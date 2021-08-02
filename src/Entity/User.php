<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"User", "message"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"User"})
     * @Assert\NotBlank(message="Veuiller renseigner votre Prénom")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"User"})
     * @Assert\NotBlank(message="Veuillez renseigner votre Nom")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * @Groups({"User", "instruments_users", "Styles_User", "Departments_Users", "channel"})
     * @Assert\NotBlank(message="Veuillez renseiger votre Pseudonyme")
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=150, unique=true)
     * @Groups({"User"})
     * @Assert\NotBlank(message="Veuillez renseigner votre Email")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     * @Groups({"User"})
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez renseigner votre Mot de Passe")
     */
    private $password;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     * @Groups({"User"})
     */
    private $age;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"User"})
     */
    private $influence;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     * @Groups({"User"})
     */
    private $experience;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"User"})
     */
    private $bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"User"})
     */
    private $picture;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"User"})
     */
    private $perimeter;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"User"})
     */
    private $status;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @Assert\Count(
     *      min = 1,
     *      minMessage = "L'utilisateur doit jouer au minimum d'un instrument"
     * )
     * @ORM\ManyToMany(targetEntity=Instrument::class, inversedBy="users")
     * @Groups({"User"})
     */
    private $Instruments;

    /**
     * @Assert\NotNull
     * @Assert\NotBlank
     * @Assert\Count(
     *      min = 1,
     *      minMessage = "L'utilisateur doit avoir au minimum un style de musique"
     * )
     * @ORM\ManyToMany(targetEntity=Style::class, inversedBy="users")
     * @Groups({"User"})
     */
    private $styles;

    /**
     * @ORM\ManyToOne(targetEntity=Department::class, inversedBy="users", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Veuillez renseigner un département existant")
     * @Groups({"User"})
     */
    private $Departments;

    /**
     * @ORM\ManyToOne(targetEntity=Availability::class, inversedBy="gender")
     * @Groups({"User"})
     */
    private $availability;

    /**
     * @ORM\ManyToOne(targetEntity=Gender::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Veuillez renseigner votre sexe")
     * @Groups({"User"})
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity=City::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Veuillez renseigner votre ville")
     * @Groups({"User"})
     */
    private $cities;

    /**
     * @ORM\OneToMany(targetEntity=Message::class, mappedBy="author")
     */
    private $messages;

    public function __construct()
    {
        $this->created_at = new DateTimeImmutable();
        $this->updated_at = new DateTime();
        $this->Instruments = new ArrayCollection();
        $this->styles = new ArrayCollection();
        $this->status = true;
        $this->messages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getInfluence(): ?string
    {
        return $this->influence;
    }

    public function setInfluence(?string $influence): self
    {
        $this->influence = $influence;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPerimeter(): ?int
    {
        return $this->perimeter;
    }

    public function setPerimeter(?int $perimeter): self
    {
        $this->perimeter = $perimeter;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @return Collection|Instrument[]
     */
    public function getInstruments(): Collection
    {
        return $this->Instruments;
    }

    public function addInstrument(Instrument $instrument): self
    {
        if (!$this->Instruments->contains($instrument)) {
            $this->Instruments[] = $instrument;
        }

        return $this;
    }

    public function removeInstrument(Instrument $instrument): self
    {
        $this->Instruments->removeElement($instrument);

        return $this;
    }

    /**
     * @return Collection|Style[]
     */
    public function getStyles(): Collection
    {
        return $this->styles;
    }

    public function addStyle(Style $style): self
    {
        if (!$this->styles->contains($style)) {
            $this->styles[] = $style;
        }

        return $this;
    }

    public function removeStyle(Style $style): self
    {
        $this->styles->removeElement($style);

        return $this;
    }

    public function getDepartments(): ?Department
    {
        return $this->Departments;
    }

    public function setDepartments(?Department $Departments): self
    {
        $this->Departments = $Departments;

        return $this;
    }

    public function getAvailability(): ?Availability
    {
        return $this->availability;
    }

    public function setAvailability(?Availability $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCities(): ?City
    {
        return $this->cities;
    }

    public function setCities(?City $cities): self
    {
        $this->cities = $cities;

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setAuthor($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getAuthor() === $this) {
                $message->setAuthor(null);
            }
        }

        return $this;
    }
}
